2
ADD helmet 50
INVENTORY

INVENTORY helmet TOTALS 50 GOLD

02
Test 2
Input
Expected output

3
ADD helmet 50
ADD gloves 66
INVENTORY

INVENTORY helmet, gloves TOTALS 116 GOLD

03
Test 3
Input
Expected output

4
ADD pants 25
ADD shirt 99
REMOVE pants
INVENTORY

INVENTORY shirt TOTALS 99 GOLD

04
Test 4
Input
Expected output

8
ADD pants 25
INVENTORY
ADD shirt 99
INVENTORY
REMOVE pants
INVENTORY
ADD pants 24
INVENTORY

INVENTORY pants TOTALS 25 GOLD
INVENTORY pants, shirt TOTALS 124 GOLD
INVENTORY shirt TOTALS 99 GOLD
INVENTORY shirt, pants TOTALS 123 GOLD

05
Test 5
Input
Expected output

6
ADD boots 12
ADD cloak 105
ADD sword 500
REMOVE cloak
INVENTORY
ADD hat 31

INVENTORY boots, sword TOTALS 512 GOLD

