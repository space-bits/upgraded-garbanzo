# Upgraded Garbanzo (There is no Garbanzo)

## Preliminaries
This is a cloud application for RMIT Cloud Computing, semester 2, 2017, by Rob Laine & Gabriel Haines  

### Brief
The project relies on an AWS EC2 instance, running ubuntu 16 and using an Apache web server for hosting a Ruby on Rails web front end.
The dataset used is the Meteorite Society's list of known meteorite impacts on Earth.
It includes ~45k entries, and documents the mass, location, and other details.

### Connecting via SSH
Firstly, you'll needa user account created on the server by the root user.
Secondly, you'll need a .pem certificate file issued by the server, or an rsa keypair created by your local machine.
Once these two things have been completed, you can ssh into the server, either by the .pem file, or after your public rsa file has been added to your user account.
[Read more here][@todo link to aws instruction on how to add new user]

### APIs
[Pedestrian data (hourly)]{https://data.melbourne.vic.gov.au/resource/cb85-mn2u.json}  
[Helping Out]{https://data.melbourne.vic.gov.au/resource/nbdz-yp2p.json}  
[Affordable Food]{https://data.melbourne.vic.gov.au/resource/uwyu-5y9e.json}  
[Bike Share Station Data]{https://data.melbourne.vic.gov.au/resource/uwyu-5y9e.json}  
