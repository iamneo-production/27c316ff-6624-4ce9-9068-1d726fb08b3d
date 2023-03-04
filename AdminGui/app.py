from flask import Flask, render_template, request
import pandas as pd
import pickle
import tensorflow as tf 
import keras 
import datetime
from keras.models import load_model

app = Flask(__name__)

model= load_model('karim_heat.h5')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/upload', methods=['POST'])
def upload():
    if request.method == 'POST':
        file = request.files['file']
        if file:
            # Load the CSV file into a Pandas DataFrame
            df = pd.read_csv(file)
            df=df.set_index("date")
            df=df.drop(columns = ["district","mandal", "temp_min"])
            df['temp_max']=df['temp_max']/50
            df['rainfall']= df['rainfall']/50

            test_x=df
            test_x=test_x.to_numpy()
            test_x=test_x.reshape(1,365, 2)

            pred = model.predict(test_x)
            pred = pred.reshape(365)
            pred1 = pd.DataFrame(data=pred,index=df.index, columns=['temp_max'])
            pred1["temp_max"] = pred1["temp_max"]*50 
            pred1["Date"]= df.index
            pred1['Date']= pd.to_datetime(pred1.Date)

            pred2= pred1.loc[(pred1['temp_max']>=40)]
            pred2= pred2.sort_values(by=['Date'])
            pred2['month']=pred2['Date'].dt.month
            pred2['normal']=pred2['month'].astype(float)
            norm= pd.read_csv("F:\\temp_normals.csv")
            for i in range(len(pred2['temp_max'])):
                pred2['normal'][i]= float(norm['Karimnagar'][int(pred2["month"][i])-1]) 

            pred2["diff"]= pred2['temp_max']-pred2['normal']
            pred3=pred2.loc[((pred2['normal']>30) & (pred2['diff']>5)) | ((pred2['normal']>30) & (pred2['diff']>4))]
            # temp = pd.DataFrame(data=pred1, index=df.index, columns=['temp_max_pred'])
            pred3["heat"]=(pred3["temp_max"]).astype(str)
            for i in range(len(pred3['temp_max'])):
                if (((pred3['normal'][i]<=40) & (pred2['diff'][i]<7)) | ((pred2['normal'][i]>40) & (pred2['diff'][i]<6))):
                    pred3['heat'][i]='Warning! Heatwave expected'
                elif (((pred3['normal'][i]<=40) & (pred2['diff'][i]>=7)) | ((pred2['normal'][i]>40) & (pred2['diff'][i]>=6))):
                    pred3['heat'][i]='Warning! Severe Heatwave expected'
                    


                

            # Render the 'results.html' template with the predicted AQI values in a table
            return render_template('results.html', table=pred3.to_html(index=False))
        else:
            return render_template('upload.html')

if __name__ == '__main__':
    app.run(debug=True)
