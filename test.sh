#!/bin/bash

/var/minecraft/nbted/nbted -p /var/minecraft/server/worlds/world_the_end/level.dat > temp.txt

sed -i -E '/\t{4}[0-9]{1,2}$/d' temp.txt
sed -i -E 's/List "Gateways" Int [0-9]+/List "Gateways" Int 20/g' temp.txt

array=("0" "1" "2" "3" "4" "5" "6" "7" "8" "9" "10" "11" "12" "13" "14" "15" "16" "17" "18" "19")
array=($(shuf -e "${array[@]}"))
index=0

for i in {1..20}
do 
  echo -e "\t\t\t\t${array[$index]}" >> temp2.txt
  index=$index+1
done

sed -i -E '/List "Gateways" Int 20/r temp2.txt' temp.txt

/var/minecraft/nbted/nbted -r temp.txt > /var/minecraft/server/worlds/world_the_end/level.dat

rm -f temp.txt
rm -f temp2.txt
