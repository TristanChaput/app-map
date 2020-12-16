DROP DATABASE app_map;
CREATE DATABASE app_map;
CREATE TABLE company (
    company_id   NUMERIC      NOT NULL,
    name         VARCHAR(255) NOT NULL,
    address      TEXT         NOT NULL,
    phone_number VARCHAR(50)  NOT NULL,
    latitude     FLOAT(8)     NOT NULL,
    longitude    FLOAT(8)     NOT NULL,
    CONSTRAINT   company_pk   PRIMARY KEY (company_id)
);

CREATE TABLE employee (
    employee_id  NUMERIC      NOT NULL,
    last_name    VARCHAR(255) NOT NULL,
    first_name   VARCHAR(255) NOT NULL,
    address      VARCHAR(255) NOT NULL,
    phone_number VARCHAR(50)  NOT NULL,
    company_id   NUMERIC      NOT NULL,
    CONSTRAINT   employee_pk  PRIMARY KEY (employee_id),
    CONSTRAINT   company_fk   FOREIGN KEY (company_id) REFERENCES company(company_id)
);