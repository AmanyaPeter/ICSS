# ICSS
How the NIN can fix Uganda
# MBARARA UNIVERSITY OF SCIENCE AND TECHNOLOGY  
**Faculty of Computing and Informatics**  
**Course:** Database Management Systems  
**Course Code:** CSC1204  
**Year:** One  
**Semester:** Two  

## End of Semester Project  
**Student Name:** Amanya Peter  
**Registration Number:** 2024/BCS/033/PS  
**Project Title:** Integrated Citizens Social Security (ICSS)  

---

## Table of Contents
1. [Project Overview](#1-project-overview)  
2. [Business Case](#2-business-case)  
    - [2.1 Application Domain](#21-application-domain)  
    - [2.2 Analysis of Benefits](#22-analysis-of-benefits)  
    - [2.3 Analysis of Costs](#23-analysis-of-costs)  
    - [2.4 User Issues](#24-user-issues)  
    - [2.5 Risk Assessment](#25-risk-assessment)  
    - [2.6 Limitations](#26-limitations)  
3. [Design](#3-design)  
    - [3.1 Logical Design](#31-logical-design)  
    - [3.2 Physical Design](#32-physical-design)  
4. [Implementation](#4-implementation)  
5. [Bibliography](#5-bibliography)

---

## 1. Project Overview

This project outlines the design and implementation of the Integrated Citizens Social Security (ICSS) database. The system integrates health records, social welfare data, and land ownership information using the **National Identification Number (NIN)** as a unique identifier and primary key.

The goal is to improve public service delivery by:
- Reducing redundancy,
- Enhancing data integrity,
- Centralizing citizen-related data.

It was implemented using a relational database system, adaptable to platforms such as MySQL, PostgreSQL, or SQLite.

---

## 2. Business Case

### 2.1 Application Domain
The system supports government and community-level operations by providing secure access to citizen information for departments such as:
- Health
- Welfare
- Land registry

### 2.2 Analysis of Benefits
**Tangible Benefits:**
- Centralized citizen data access
- Reduced time for verification
- Enhanced accuracy via NIN

**Intangible Benefits:**
- Increased trust in government systems
- Informed policy-making
- Reduced duplication and fraud

### 2.3 Analysis of Costs
**Tangible Costs:**
- Hosting & maintenance
- Training staff

**Intangible Costs:**
- Resistance to adoption
- Privacy & data concerns

### 2.4 User Issues
- Some users may have limited digital literacy
- Administrative staff require training
- UI designed to be simple and user-friendly

### 2.5 Risk Assessment
- **Technical:** Data loss, system failures  
- **Organizational:** Pushback from departments using legacy systems  
- **Security:** Requires encryption, access control

### 2.6 Limitations
- No biometric authentication (yet)  
- Manual data updates  
- No mobile access currently  

---

## 3. Design

### 3.1 Logical Design

**Entities & Attributes:**

- `Citizen`: `nin` (PK), `first_name`, `last_name`, `date_of_birth`, `gender`, `phone`, `address`
- `Health_Record`: `record_id` (PK), `nin` (FK), `blood_type`, `chronic_conditions`, `allergies`, `last_checkup`
- `Social_Welfare`: `record_id` (PK), `nin` (FK), `status`, `program`, `date_enrolled`
- `Land_Ownership`: `record_id` (PK), `nin` (FK), `plot_number`, `location`, `size_acres`, `registered_date`

**Entity Relationships:**
- Citizen ↔ Health_Record: One-to-One  
- Citizen ↔ Social_Welfare: One-to-One  
- Citizen ↔ Land_Ownership: One-to-Many  

**Multiplicities:**  
Each citizen has at most one health and one welfare record, but may own multiple land plots.

**ER Diagram:**  
📷 _Insert ER Diagram screenshot here_

**User Interface:**  
- NIN-based search form  
- Tabs for Health, Welfare, Land  
- Export/report button  

### 3.2 Physical Design

**Schema Layout:**  
- Follows normalized structure in 3NF  
- Proper indexing on `nin` foreign key in related tables

📷 _Insert screenshot of table structure in your DBMS tool_

**Sample Queries:**
- View full profile of a citizen
- List citizens with chronic illnesses
- Citizens not in any welfare program
- List landowners with plots > 2 acres
- Cross-tab of health + welfare + land

---

## 4. Implementation

**Database Used:** MySQL (or any RDBMS)

### Table Creation
📷 _Insert screenshot of successful CREATE TABLE queries_

### Sample Data
📷 _Insert screenshot of inserted records for all tables_

### Sample Queries and Outputs
- Citizens with land but no health record  
- Find youth in welfare programs  
- Report on large landowners  
📷 _Insert screenshot of SQL output/results_

---

## 5. Bibliography

- Connolly, T., & Begg, C. (2015). *Database Systems: A Practical Approach to Design, Implementation, and Management*.  
- National Identification and Registration Authority (NIRA) documents.  
- Case studies from Uganda Revenue Authority (URA), National Social Security Fund (NSSF), and the U.S. Social Security Administration (SSA).  

---

## ⚙️ Future Work

- Integrate biometric authentication  
- Mobile app interface  
- API-based real-time connections to government systems (e.g., NSSF, URA)  
