Sub Create_Tables()

DoCmd.RunSQL "CREATE TABLE Categorie(" & _
   "idCategorie INT PRIMARY KEY," & _
   "nomCategorie VARCHAR(50)," & _
   "ageMin INT," & _
   "ageMax INT," & _
   "reductionTarif INT" & _
");"   

DoCmd.RunSQL "CREATE TABLE Moniteur(" & _
   "idMoniteur INT PRIMARY KEY," & _
   "nomMoniteur VARCHAR(50)," & _
   "prenomMoniteur VARCHAR(50)" & _
");"   

DoCmd.RunSQL "CREATE TABLE Adherents(" & _
   "idAdherent INT PRIMARY KEY," & _
   "nomAdherent VARCHAR(50)," & _
   "prenomAdhrent VARCHAR(50)," & _
   "adresseAdherent VARCHAR(50)," & _
   "cpAdherent CHAR(5)," & _
   "villeAdherent VARCHAR(50)," & _
   "telephoneAdherent VARCHAR(50)," & _
   "photo IMAGE," & _
   "dateNaissance DATE," & _
   "idCategorie INT REFERENCES Categorie(idCategorie) NOT NULL" & _
");"   

DoCmd.RunSQL "CREATE TABLE Entrainement(" & _
   "idEntrainement INT PRIMARY KEY," & _
   "dateEntrainement DATE," & _
   "heureDebut TIME," & _
   "heureFin TIME," & _
   "objectifEntrainement VARCHAR(50)," & _
   "idMoniteur INT REFERENCES Moniteur(idMoniteur) NOT NULL" & _
");"   

DoCmd.RunSQL "CREATE TABLE testNiveau(" & _
   "idTest INT PRIMARY KEY," & _
   "nomNiveau VARCHAR(50)," & _
   "dateTest DATE," & _
   "heureDebut TIME," & _
   "heureFin TIME," & _
   "lieuTest VARCHAR(50)," & _
   "description TEXT," & _
   "idMoniteur INT REFERENCES Moniteur(idMoniteur) NOT NULL" & _
");"   

DoCmd.RunSQL "CREATE TABLE Participe(" & _
   "idAdherent INT REFERENCES Adherents(idAdherent) NOT NULL," & _
   "idEntrainement INT REFERENCES Entrainement(idEntrainement) NOT NULL," & _
   "PRIMARY KEY(idAdherent, idEntrainement)," & _
   "absent LOGICAL" & _
");"   

DoCmd.RunSQL "CREATE TABLE Fait(" & _
   "idAdherent INT REFERENCES Adherents(idAdherent) NOT NULL," & _
   "idTest INT REFERENCES testNiveau(idTest) NOT NULL," & _
   "PRIMARY KEY(idAdherent, idTest)," & _
   "resultatTest LOGICAL" & _
");"   

End Sub