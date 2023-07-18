#include <WiFi.h>
#include <HTTPClient.h>


String URL = "http://192.168.72.101/websensor/write_data1.php";

const char* ssid = "My17Network"; 
const char* password = "My17Network"; 

int sensor = 0;

void setup() {
  Serial.begin(115200);
  
  connectWiFi();
}

void loop() {
  if(WiFi.status() != WL_CONNECTED) {
    connectWiFi();
  }

  Load_websensor_Data();
  String postData = "sensor=" + String(sensor);
  
  HTTPClient http;
  http.begin(URL);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");
  
  int httpCode = http.POST(postData);
  String payload = http.getString();

  Serial.print("URL : "); Serial.println(URL); 
  Serial.print("Data: "); Serial.println(postData);
  Serial.print("httpCode: "); Serial.println(httpCode);
  Serial.print("payload : "); Serial.println(payload);
  Serial.println("--------------------------------------------------");
  delay(1000);
}


void Load_websensor_Data() {
  //-----------------------------------------------------------
  sensor = analogRead(A0);
  //-----------------------------------------------------------
  // Check if any reads failed.
  if (isnan(sensor)) {
    Serial.println("Failed to read from Sensor!");
    sensor = 0;
  }
  //-----------------------------------------------------------
  Serial.printf("Sensor: ", sensor);
}

void connectWiFi() {
  WiFi.mode(WIFI_OFF);
  delay(1000);
  //This line hides the viewing of ESP as wifi hotspot
  WiFi.mode(WIFI_STA);
  
  WiFi.begin(ssid, password);
  Serial.println("Connecting to WiFi");
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
    
  Serial.print("connected to : "); Serial.println(ssid);
  Serial.print("IP address: "); Serial.println(WiFi.localIP());
}
