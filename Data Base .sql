CREATE TABLE etudiant (
    etudiant_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    family_name VARCHAR(50) NOT NULL,
    idnumber INT NOT NULL UNIQUE,
    balance DECIMAL(10, 3) NOT NULL DEFAULT 0,
    join_date DATE NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE formateur (
    formateur_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    family_name VARCHAR(50) NOT NULL,
    idnumber INT NOT NULL UNIQUE
);

CREATE TABLE etudiant_payments (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    etudiant_id INT,
    amount DECIMAL(10, 3) NOT NULL,
    is_canceled BOOLEAN DEFAULT false,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (etudiant_id) REFERENCES etudiant(etudiant_id)
);

CREATE TABLE formateur_payments (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    formateur_id INT,
    payment_type VARCHAR(50) NOT NULL,
    amount DECIMAL(10, 3) NOT NULL,
    is_canceled BOOLEAN DEFAULT false,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (formateur_id) REFERENCES formateur(formateur_id)
);

CREATE TABLE formation (
    formation_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 3) NOT NULL,
    formateur_id INT,
    date_start DATE NOT NULL,
    date_end DATE NOT NULL,
    type VARCHAR(50) NOT NULL,
    FOREIGN KEY (formateur_id) REFERENCES formateur(formateur_id)
);

CREATE TABLE enrollment (
    enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
    formation_id INT,
    etudiant_id INT,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (formation_id) REFERENCES formation(formation_id),    
    FOREIGN KEY (etudiant_id) REFERENCES etudiant(etudiant_id),
    FOREIGN KEY (payment_id) REFERENCES etudiant_payments(payment_id)
);

CREATE TABLE formateur_formation (
    formateur_formation_id INT PRIMARY KEY AUTO_INCREMENT,
    formateur_id INT,
    formation_id INT,
    payment_type VARCHAR(50) NOT NULL,
    amount DECIMAL(10, 3) NOT NULL,
    is_canceled BOOLEAN DEFAULT false,
    FOREIGN KEY (formateur_id) REFERENCES formateur(formateur_id),
    FOREIGN KEY (formation_id) REFERENCES formation(formation_id)
);

create Table annual_payment (
    annual_payment_id INT PRIMARY KEY AUTO_INCREMENT,
    etudiant_id INT,
    amount DECIMAL(10, 3) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (etudiant_id) REFERENCES etudiant(etudiant_id)
);
create Table charges (
    charge_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    amount DECIMAL(10, 3) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create Table monthly_charges (
    monthly_charge_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    amount DECIMAL(10, 3) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);