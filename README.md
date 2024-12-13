# 👋 Welcome to our Christmas Toy Factory! 👋

I decided to make this application to facilitate job searching, as it would be much easier for me to keep track of the offers I apply for.
It is created in Laravel 11 with two views and an API to manage offers, messages and companies.
In the main view we will see a list of all the offers with a green border if it is activated and red if it is not, we will also see the logo of your company and its URL, if a company image is not indicated, a default one will be set. There will also be a button to filter the offers by their status.
In the view of each offer, you will see the details of the offer with their respective follow-up messages.
- **Index View**:
![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733831936/imagen_2024-12-10_125902548_pve0w5.png)

## 📊📁 DB Diagram
Below is a diagram of the database, showing different relationships between tables:

- **Toy - MinimumAge:** One to many relationship. A minimum age can have many toys, but each toy belongs to only one minimum age.

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
 
## 🛠️🚀 Tech Stack
- **Languages:** Html, Blade
- **Frameworks:** Laravel, TailwindCSS
- **Server:** Xampp, Apache, Nodejs
- **Database:** Mysql
- **Others:** Composer, Postman


## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage-html=coverage-report
```

If everything is correct, everything should be OK.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733825508/imagen_2024-12-10_111156391_ks5bjc.png)

A folder called coverage-report will also have been generated with **96.60%** coverage.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733825767/imagen_2024-12-10_111614760_b94mzw.png)

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
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:antonioguillengarcia123@gmail.com)

- **Miguel Angel García:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:miguelg.lopez@outlook.com)

- **Santino Vigna:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/SantiVigna)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:ynotvigna@gmail.com)