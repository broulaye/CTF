# Project 10 - Fortress Globitek

Time spent: 3 hours spent in total

> Objective: Create an intentionally vulnerable version of the Globitek application with a secret that can be stolen.

### Requirements

- [x] All source code and assets necessary for running app
- [x] `/globitek.sql` containing all required SQL, including the `secrets` table
- [x] GIF Walkthrough of compromise
  <img src='http://i.imgur.com/tfkYs7b.gif' title='Video Walkthrough' width='' alt='Fortress' />
- [x] Brief writeup about the vulnerabilities introduced below


### Vulnerabilities

  USE IDOR to identify the id of the user who has the secrect and also the master password to login </br>
  GIF Walkthrough: </br><img src='http://i.imgur.com/bcIGnpr.gif' title='Video Walkthrough' width='' alt='IDOR1' /></br>
  
  USE SQLI along with the master password to login</br>
  GIF Walkthrough: </br><img src='http://i.imgur.com/OjwV62G.gif' title='Video Walkthrough' width='' alt='SQLI' /></br>
  
  USE IDOR again to find the secret using the id of the secret keeper</br>
  GIF Walkthrough: </br><img src='http://i.imgur.com/3O2p0Lb.gif' title='Video Walkthrough' width='' alt='SQLI' />
