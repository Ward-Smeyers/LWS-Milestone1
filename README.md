# LWS-Milestone1

Set up a containerized web stack using a Dockerfile and Compose (30% PE)

For this individual assignment, you will create a document and a video as proof that explains how you created a Dockerfile and docker-compose.yaml file to set up a LAMP stack. You will also use Generative AI as a tool to help you make your code better and increase your understanding of the containerization. Use Vagrant to set up a VM to create your solution. The goal of the assignment is to set up the following at the minimum:

    an Apache2 container, serving a web page,
    another container which will run MySQL.

You might need additional containers, depending on how you choose to complete the assignment (All roads lead to Rome) and if you are willing to go the extra mile for extra credits!

Your image will be based on Ubuntu 24.04. The Apache2 webserver will install automatically when the image is created. 

The container with the MySQL server will be connected with a database, containing only 1 record which contains your full name. 

When you run the containers, a web page with the text "<Student name> has reached Milestone 1!!" will appear on your screen. This webpage is accessible on your Linux server on port 8085. You will query your name out of the MySQL database. Your data files (your webfile and your database) are not located in your containers but are located on your Linux machine.

When you change your name in the database, your web page will automatically update the information (after a browser refresh). The data in your database is also persistent, which means that if you remove your containers and restart your stack, the data will still be present in the database. Explain in your documentation why this is. You must also provide proof of this using a very short video (maximum length: 1 minute)

Bonus points (3 extra points): if you can implement horizontal scaling techniques to load balance the web traffic between multiple webserver containers, you can earn these bonus points. You have to scale only your webserver. Print the hostname of your container to your web page to prove that the load balancing works across containers. Include the used configuration files in your documentation with appropriate explanation. Provide proof of this using a very short video as well (maximum length: 1 minute).

Bonus points (3 extra points): you can earn these bonus points by encrypting the traffic to your webserver. Connect to your website using a domain and show that the traffic is secured. Explain the steps you took to set up this secured connection in your documentation. Provide proof of the encryption in a very short video as well (maximum length: 1 minute).

The rules again:

    Using generative AI to help you solve the challenge is mandatory! Check the Generative AI Policy to learn more on how to use this correctly.
    At the end of the document, you should include all the prompts and the responses (in clear text, no screenshots) that helped you create the code, improve it or increased your knowledge and understanding of the material.
    Write a reflection on how AI helped you and what you learned from it.
    Without providing the necessary prompts and reflections, we cannot evaluate your understanding of the assignment and we can thus not give you any points. 
    Don’t copy each other's document, we will use Turnitin to check for plagiarism
    Include your name in your Linux username. Use contapa2-m1-<yourinitials> for your apache container, use contsql-m1-<yourinitials> for your MySQL container
    Your document has a nice, professional layout and a proper introduction and conclusion
    Document every step and command you enter to accomplish this. User readable screenshots. Explain every parameter and option inside the commands as well. What does it do and why are you using it?
    Show your Dockerfile and Docker-compose file and explain every line in detail. Also include the other files you used, if any.

Good luck and don’t forget to have fun!

The Linux WS teachers
