#####################################
change the xml file with the chosen test
#####################################
$newvar = $oldvar -creplace '(?s)<classes>.*?</classes>', '$1'

#####################################
After changing the xml's file with the choosen test, launch it with testNG :
#####################################
java -cp libs/$;bin org.testng.TestNG 