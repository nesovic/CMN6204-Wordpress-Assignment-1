# CMN6204 - Wordpress Assignment 1

Hi all! So far we went through Wordpress installation and the administration features. At this point you are expected to be able to setup and administer stock Wordpress themes on your own.

During this assignment, you will put that knowledge into practice, and it is expected to take you at least 2-3 hours to finish everything so don't let that demotivate you.

*Yes, all the steps are mandatory.*

At the end of the assignment, you will have a repository with a working Wordpress installation, ready for further work. We will use this same project to built custom themes in the following assignments.

# Deadline

The project is mandatory, as we will use it on lectures. All tasks are mandatory. The deadline is next Wednesday at 23:59. 

From the very next lecture, we will be dwelling deeper and deeper into code. Please do not fail to submit the project on time, as it will prevent you from actively working on the lecture and understanding the future code.

If you have any questions during the way (and you should), please ask on Slack, in the #code channel.

## Week 1

### Tasks

1. Fork this repository grom GitHub to your own account
2. Pull the repository to your local machine. Your wordpress will be installed here, and all your work must be submitted through this repository.
3. Download and install Wordpress (you might have to set up the server and a new mysql database) The name of the website should be `SAE Alumni Blog`.
4. Log in to admin at `http://mysite.dev/wp-admin/`. Go through all the sidebar items to remind yourselves of everything we have talked about today. If you are asked to perform any updates, do it.
5. Create following Post categories ['News', 'Alumni', 'Success Stories']. News will be used for general announcements, Alumni will contain only pages with personal portfolios of people, and success stories can include interviews with people.
6. 'News' Category should have two sub categories ['SAE', 'Industry'].
7. Create the following Tags ['Web Departmant', 'Audio Departmant', 'Film Departmant', 'Animation Departmant'].
8. Create a bunch of random posts of your choice, lorem ipsum or whatever. News:2, Alumni:4, Stories:2. The posts MUST be named appropriately. For example, 'Jovana just got her first job after graduation', obviously belongs in the 'Success Stories' category, right? All posts in the Alumni section need to have a photo of the person (find some random photos off the internet).
9. You need to set tags on all posts. So if the particular post is to be considered to fall into one or more SAE departmants, it must be tagged appropriately.
10. Create the following pages: ['Contact', 'About SAE', 'Departments'] put in some random data in each. About page should contain an embeded youtube video, available at this link: `https://www.youtube.com/watch?v=gVu-GHApLWA`.
11. You should create a header menu, and assign all three pages to it. Fourth menu item should be a static link to SAE Facebook page. And it should be a child of 'About SAE'. (a dropdown sub menu)
12. You should create a separate menu for social links. At this point those will be links to SAE's twitter, facebook and contact page.
13. Reorder sidebar widgets. Search should go first, categories second, and an embeded video (same as the one above) should be third. Drop all other widgets from the sidebar.
14. Install a plugin - 'Advanced Custom Fields By Elliot Condon'. Find it in the wordpress plugin directory, via your admin panel, and click install. We will not use it yet, it is just enough to install it.
15. Create a database backup as an SQL file, and save it to the project root folder under the name - (current date) '14.09.2017'. If you have any problems with this segment, ask on Slack. It should be fairly easy to accomplish from phpMyAdmin console.
16. Commit all changes and open up a pull request aimed at the original SAE repository on GitHub.

Rejoice, Hooray!
