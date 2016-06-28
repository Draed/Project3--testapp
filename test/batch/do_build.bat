### variable d'entrée du script :
#%1 = application 
#%2 = environnement
#%3 = Donnees
#%4 = Test

set dataSetName=%2+%3
set path='data/'%1'/'%dataSetName%

#####################################
changement dans le fichier data.xml pour le test a effectuer
#####################################
####1) Mise en forme du test pour l'insertion dans le fichier de data .xml
set insertTestName=<class name="%4"></class> 
#####################################
####2) insertion du test dans le fichier data :
set testInsert=$oldvar -creplace '<classes>.*?</classes>', '%1'

#####################################
Après changement du fichier de données (.xml) lance le test avec testNG.
#####################################
java -cp libs/%;bin org.testng.TestNG %path%