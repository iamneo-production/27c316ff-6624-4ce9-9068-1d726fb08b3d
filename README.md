# 27c316ff-6624-4ce9-9068-1d726fb08b3d
https://sonarcloud.io/summary/overall?id=examly-test_27c316ff-6624-4ce9-9068-1d726fb08b3d

TEAM SKY
This document explains about the project in detail, about dataset, methodology and working of our 
project.
DATASET
AQI
The dataset was compiled from various dataset available at Telangana Open Data portal. For Predicting 
AQI, we need at least three pollutants. Out of the major pollutants, for all the district for which we need 
to provide predictions, only SO2, NOx and PM10 data was available in Monthly average frequency 
(2016-2022).
Heatwave
The dataset was sourced from https://power.larc.nasa.gov/data-access-viewer/, earlier we tried to train 
our models with data accessed from Telangana Open Data portal, but the accuracy of data were not 
found satisfactory so then we used data of 1991-2022 period (daily frequency) which had maximum 
temp of the day and rainfall observed on the day.
The temperature is highly dependent on AQI, but the data for AQI was available only in Monthly 
frequency, So we assumed that AQI does not affect the temperature.
Methodology:
AQI
To calculate the AQI we need at least 3 pollutants, out of these three pollutants at least one should be 
either PM2.5 or PM10.
So to predict AQI we will predict each pollutants separately. This methodology is called Univariate 
time series forecasting. For this we tried various methods/algorithms like ARIMA, SARIMAX, Prophet 
and Holt Winter’s Triple Exponential Smoothing (HWTES). Out of all algorithms, the best results were 
achieved by HWTES by a very significant difference of RMSE and MAPE (difference >5-10%).
While training the model, we need to remember that during lockdowns the concentration of PM10 and
NOx were reduced by as much as 45% from 2019,
[reference:
https://tspcb.cgg.gov.in/Environment/Report%20on%20Ambient%20Air%20Quality%20of%20TS%2
0during%20Lockdown.pdf].
Heatwave
To calculate the heatwave we need to predict maximum temperature, and then find the departure from 
normal. 
The Indian Meteorological Department (IMD) has given the following criteria for Heat Waves :
▪ Heat Wave need not be considered till maximum temperature of a station reaches atleast 40°C for Plains and 
atleast 30°C for Hilly regions
▪ When normal maximum temperature of a station is less than or equal to 40°C Heat Wave Departure from 
normal is 5°C to 6°C Severe Heat Wave Departure from normal is 7°C or more
▪ When normal maximum temperature of a station is more than 40°C Heat Wave Departure from normal is 
4°C to 5°C Severe Heat Wave Departure from normal is 6°C or more
▪ When actual maximum temperature remains 45°C or more irrespective of normal maximum temperature,
heat waves should be declared.
The Heatwave model is based on LSTM model, we provide input of previous 365 days maximum 
temperature and rainfall data, to predict next 365 days temperature.
After getting temperature prediction, we find the departure from normal and determine the occurrence
of heatwave.
GUI:
First open XAMPP Apache server in any browser and write : localhost/frontend
For ADMIN end :
The user has to launch app.py using the command “python app.py” . This will open the file app.py and 
start the flask server and then the user can use the flask website.
