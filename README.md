# 🎅 Welcome to our Christmas Toy Factory! 🎄

This project aims to develop a platform to help Santa Claus and his elves manage the toy factory and organize the gift list for children during the Christmas season.

The application includes an intuitive and functional interface as well as an API that allows the elves to perform various essential tasks, such as managing toys.

With this system, Santa Claus will be able to ensure that each child receives the perfect gift, thus ensuring a magical Christmas.
- **Index View**:
![image](https://github.com/user-attachments/assets/2542b2fe-e6cf-4aa4-8ea0-cfd43a775b78)


## 🛠️🚀 Tech Stack
- **Languages:** Html, Blade
- **Frameworks:** Laravel, TailwindCSS
- **Server:** Xampp, Apache, Nodejs
- **Database:** Mysql
- **Others:** Composer, Postman

## 📊📁 DB Diagram
Below is a diagram of the database, showing different relationships between tables:

- **toy - minimum_age:** One to many relationship. A minimum age can have many toys, but each toy belongs to only one minimum age.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1734101541/imagen_2024-12-13_155219091_p0kr3s.png)


## 🔧⚙️ Installation
- Clone repository
```
git clone https://github.com/AntonioGuillen123/ChristmasToyFactory
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=christmas_toy_factory
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```

- Execute migrations  
```
php artisan migrate
```

## ▶️💻 Run Locally
- How to run the Laravel server  
```
php artisan serve
```

- If you want to run all this in development environment run the following command  
```
npm run dev
```

- For production you should run the following command 
```
npm run build
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage-html=coverage-report
```

If everything is correct, everything should be OK.

![image](https://github.com/user-attachments/assets/11cf1200-71ff-4dab-a449-fbdc15188eb2)


A folder called coverage-report will also have been generated with **86.05%** coverage.
![image](https://github.com/user-attachments/assets/7d066461-0c33-4e5d-bbc1-1c26a120de2e)

## 📡🌐 Christmas Toy Factory API

This API allows you to manage toy entries and provides CRUD (Create, Read, Update, Delete) operations for these.

### Toy

#### 1 Get all toy entries

```http
  GET /api/elve
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

## ✍️🙍 Authors
- **Antonio Guillén:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/AntonioGuillen123)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/antonio-guill%C3%A9n-905b941ab)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:antonioguillengarcia123@gmail.com)

- **Manuel Espinosa:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Manusitox360)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/manuel-espinosa-guillén-950781294/)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:espinosaguillenmanuel@gmail.com)

- **Álvaro Cervera:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Kalixto73a)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/álvaro-cervera-vigara-745576337/)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:Kalixto75@gmail.com)

- **Miguel Angel García:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:miguelg.lopez@outlook.com)

- **Santino Vigna:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/SantiVigna)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:ynotvigna@gmail.com)
