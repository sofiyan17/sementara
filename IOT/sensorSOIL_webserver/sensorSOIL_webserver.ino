#include <WiFi.h>
#include <HTTPClient.h>
#include <LiquidCrystal_I2C.h>   

LiquidCrystal_I2C lcd(0x27,16,2); 

// Link Sensor 
String URL = "http://192.168.70.101/websensor/write_data1.php";

// Link Relay 
String RelayURL = "http://192.168.70.101/websensor/bacarelay.php";

// SSID dan PASS WIFI
const char* ssid = "ebonk"; 
const char* password = "12345678"; 

int sensor = 0;

// PIN Relay
#define pin_relay 15

void setup() {
  Serial.begin(115200);
  
  // Proses Koneksi EPS32 ke WIFI
  connectWiFi();

  // LCD________________________________
  lcd.init();         
  lcd.setBacklight(HIGH); 
  delay(2000);
  lcd.clear();
  lcd.setCursor(3,0);
  lcd.print("Penyiraman");  
  lcd.setCursor(0,1);
  lcd.print("Tanaman Otomatis");
  delay(2000);
  lcd.clear();
  // LCD________________________________

  // Keadaan Relay Sebelum Button di Tekan 
  // 0 : ON - 1 : OFF
  pinMode(pin_relay, OUTPUT);
  digitalWrite(pin_relay, 1);  
}

void loop() {
  // Proses Jika Koneksi Gagal
  if(WiFi.status() != WL_CONNECTED) {
    connectWiFi();
  }

  // LCD START____________________________________
  if (sensor > 5000 )
    Serial.print("KERING");
  else if (sensor > 4000 && sensor < 5000)
    Serial.print("NORMAL");
  else
    Serial.println("BASAH");
    
  Serial.print(sensor);
  Serial.println(")");
  lcd.setCursor(0,0);
  lcd.print("Nilai Sensor");  
  lcd.setCursor(0,1);
  lcd.print(sensor);
  delay(3000);
  // LCD END____________________________________

  // Pemakaian Fungsi Data Sensor  
  Load_websensor_Data();

  // Ubah Nilai Sensor ke String   
  String postData = "sensor=" + String(sensor);
  
  // Koneksi Sensor____________________________________________________
  HTTPClient http;
  http.begin(URL);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");
  
  // POST Nilai Sensor ke Database   
  int httpCode = http.POST(postData);
  String payload = http.getString();

  Serial.print("URL1 : "); Serial.println(URL); 
  Serial.print("Data: "); Serial.println(postData);
  Serial.print("httpCode: "); Serial.println(httpCode);
  Serial.print("payload : "); Serial.println(payload);
  Serial.println("--------------------------------------------------");
  delay(1000);
  http.end();
  // Koneksi Sensor____________________________________________________

  // Koneksi Relay_____________________________________________________
  HTTPClient httpRelay;
  httpRelay.begin(RelayURL);
  httpRelay.addHeader("Content-Type", "application/x-www-form-urlencoded");

  Serial.print("URL2 : "); Serial.println(RelayURL); 
  Serial.println("--------------------------------------------------");
  delay(1000);

  // Mengambil Nilai Relay 
  httpRelay.GET();

  // Tampilkan Nilai Relay ke Serial Monitor 
  String responseRelay = httpRelay.getString();
  Serial.println(responseRelay);
  httpRelay.end();

  // Keadaan Relay Setelah Button di Tekan
  digitalWrite(pin_relay, responseRelay.toInt());
  // Koneksi Relay_____________________________________________________
}

// Sensor
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
