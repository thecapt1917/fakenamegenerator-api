Fakenamegenerator.com API
=============================
This is unofficial API of fakenamegenerator.com

HTTP API
------------
Endpoint: https://api.stpn.xyz/fakenamegenerator

Method: **GET**

Parameters:

<details>
  <summary> <b>nameset</b></summary> 
  
  ```
us: American
ar: Arabic
au: Australian
br: Brazil
celat: Chechen (Latin)
ch: Chinese
zhtw: Chinese (Traditional)
hr: Croatian
cs: Czech
dk: Danish
nl: Dutch
en: England/Wales
er: Eritrean
fi: Finnish
fr: French
gr: German
gl: Greenland
sp: Hispanic
hobbit: Hobbit
hu: Hungarian
is: Icelandic
ig: Igbo
it: Italian
jpja: Japanese
jp: Japanese (Anglicized)
tlh: Klingon
ninja: Ninja
no: Norwegian
fa: Persian
pl: Polish
ru: Russian
rucyr: Russian (Cyrillic)
gd: Scottish
sl: Slovenian
sw: Swedish
th: Thai
vn: Vietnamese
  ```
</details>
<details>
  <summary> <b>country</b></summary> 
  
  ```
au: Australia
as: Austria
bg: Belgium
br: Brazil
ca: Canada
cyen: Cyprus (Anglicized)
cygk: Cyprus (Greek)
cz: Czech Republic
dk: Denmark
ee: Estonia
fi: Finland
fr: France
gr: Germany
gl: Greenland
hu: Hungary
is: Iceland
it: Italy
nl: Netherlands
nz: New Zealand
no: Norway
pl: Poland
pt: Portugal
sl: Slovenia
za: South Africa
sp: Spain
sw: Sweden
sz: Switzerland
tn: Tunisia
uk: United Kingdom
us: United States
uy: Uruguay
  ```
</details>
<details>
  <summary> <b>gender</b> (optional, default = 0)</summary> 
  
  ```
  0: Female
  1: Male
  ```
</details>

## EXAMPLES
- https://api.stpn.xyz/fakenamegenerator?nameset=br&country=us
- https://api.stpn.xyz/fakenamegenerator?nameset=br&country=us&gender=1

## RESPONSE
<details>
  <summary> Example</summary> 
  <b>GET</b> https://api.stpn.xyz/fakenamegenerator?nameset=br&country=us
  
  ```
  {
    "profile": {
        "name": "Kaua Alves Almeida",
        "address1": "4881 Meadowview Drive",
        "address2": "Fredericksburg, VA 22401",
        "mothersname": "Araujo",
        "phone": "540-860-5958",
        "ccode": "1",
        "birthday": "July 2, 1968",
        "age": "53 years old",
        "zodiak": "Cancer"
    },
    "online": {
        "username": "Sufficany",
        "email": "KauaAlvesAlmeida@rhyta.com",
        "password": "fu2Ohghuo1i",
        "website": "instructionpen.com"
    },
    "finance": {
        "type": "MasterCard",
        "cc": "5481 7579 0590 2708",
        "expired": "12/2025",
        "cvv2": "066"
    },
    "employment": {
        "company": "Brown Derby",
        "occupation": "Development specialist"
    },
    "physical": {
        "height": "5' 9\" (175 centimeters)",
        "weight": "203.1 pounds (92.3 kilograms)",
        "blood_type": "B+"
    },
    "tracking_numbers": {
        "ups": "1Z A96 33A 75 4696 552 1",
        "western_union": "3883763707",
        "moneygram": "50425167"
    },
    "other": {
        "favorite_color": "Blue",
        "vehicle": "2009 Bentley Continental Flying Spur",
        "guid": "9cbc8c1d-e0f2-4d2f-b833-4d04e7dd320d"
    }
}
  ```
</details>

## USAGE

#### PHP Example

```php
<?php
  $response = file_get_contents('https://api.stpn.xyz/fakenamegenerator/?nameset=br&country=us');
  $data = json_decode($response);
  $name = $data['profile']['name'];
  echo $name; // 'Kaua Alves Almeida'
<?
```
