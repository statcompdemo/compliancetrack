import mysql.connector

con= mysql.connector.connect(
    host="localhost",
    user="root" ,
    password="",
    database="test"
 )
print(con,"connection establish")

cursor=con.cursor()
cursor.execute("create database if not exists test_db")
cursor.execute("use test_db")
cursor.execute("create table if not exists users(id int auto_increment primary key,name varchar(100),email varchar(100))")
print("database and table is created successfully")

cursor.execute("insert into users(name,email) values ('minal','minal@gmail.com'),('sakshi','sakshi@gmail.com')")
con.commit()
print("data inserted successfully")

cursor.execute("select * from users")
rows=cursor.fetchall()
for row in rows:
    print(row)

cursor.execute("update users set name='pratiksha' where name='sakshi' and id=4")
con.commit()
print("data updated successfully")

cursor.execute("delete from users where id=5")
con.commit()
print("Data is deleted successfully")

con.close()