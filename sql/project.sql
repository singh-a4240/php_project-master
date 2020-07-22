DROP DATABASE IF EXISTS project;
CREATE DATABASE project;
USE project;

CREATE TABLE Doctor
( DoctorID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Password VARCHAR(50) NOT NULL,
  Name VARCHAR(50) NOT NULL,
  Email VARCHAR(100),
  PhoneNumber VARCHAR(20),
  Address VARCHAR(100) NOT NULL,
  Speciality VARCHAR(50) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Patient
( PatientID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Password VARCHAR(50) NOT NULL,
  Name VARCHAR(50) ,
  Email VARCHAR(100),
  PhoneNumber VARCHAR(20),
  Address VARCHAR(100)
) ENGINE=InnoDB;

CREATE TABLE Disease
( DiseaseID INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Type VARCHAR(50) NOT NULL,
  Description VARCHAR(100)
) ENGINE=InnoDB;

CREATE TABLE Visit
( VisitID INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
  DoctorID INT  NOT NULL,
  PatientID INT NOT NULL,
  DiseaseID INT NOT NULL,
  Date DATE NOT NULL,
  FOREIGN KEY (PatientID) REFERENCES Patient(PatientID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (DoctorID) REFERENCES Doctor(DoctorID) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (DiseaseID) REFERENCES Disease(DiseaseID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;




INSERT INTO Doctor VALUES
  (1,'12345', 'Julie Smith', 'julies@gmail.com', '7789263677', '357 North Road','Dermatologists'),
  (2, '23456','Harmony Sea', 'harmonys@gmail.com', '7789253577', '246 New West Road','Ophthalmologists'),
  (3, '34567', 'Wesley Brandy', 'wesleyb@gmail.com', '7789213177', '123 Burnaby Road','Obstetrician'),
  (4, '45678', 'Brittny Jolin', 'brittnyj@gmail.com', '7789233477', '78 York Road','Cardiologists'),
  (5, '56789', 'Yasuko Oaks','yasuko@gmail.com', '7789263877', '357 Grand Road','Endocrinologists');


INSERT INTO Patient VALUES
  (1, '123456', 'Julie Smith', 'julies@gmail.com', '7789263677', '357 North Road'),
  (2,'234567', 'Harmony Sea', 'harmonys@gmail.com', '7789253577', '246 New West Road'),
  (3,'345678', 'Wesley Brandy', 'wesleyb@gmail.com', '7789213177', '123 Burnaby Road'),
  (4,'456789', 'Brittny Jolin', 'brittnyj@gmail.com', '7789233477', '78 York Road'),
  (5, '567890', 'Yasuko Oaks', 'yasuko@gmail.com', '7789263877', '357 Grand Road');


INSERT INTO Disease VALUES
  (1, 'Diabetes', 'the bodys immune system attacks and destroys the beta cells in the pancreas that make insulin'),
  (2, 'Lupus', 'affect the joints, skin, kidney and other organs of the body'),
  (3, 'Allergies', ' bodys immune system overreacts to a foreign substance'),
  (4, 'Cancer', 'caused by the uncontrolled and destructive growth of cells'),
  (5, 'Liver Disease', 'decrease the quality of life for those afflicted and can even lead to death');

INSERT INTO Visit VALUES
  (1, 1, 1, 1, '2020-06-01'),
  (2, 2, 1, 2, '2020-06-02'),
  (3, 3, 2, 3, '2020-06-04'),
  (4, 4, 3, 4,'2020-06-05');
  

