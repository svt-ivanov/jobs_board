# Back-end programming assignment
In a context of hypothetical job board project, please implement following user stories:
## User story 1
As a HR manager I would like to go to job submission page, fill out a form and publish a job offer.

+ new job form should contain title, description and email field. 
+ when it is hit submit button, if this is my first job posting I should receive email saying that my submission is in moderation, otherwise it should be public/published. 

## User story 2
As a job board moderator I would like to receive email every time someone posts a job for a first time. 

+ every time someone posts a job for a first time (based on email address) I should receive email about it. 
+ email notification should contain title and description of submission, as well as links to approve (publish) or mark it as a spam. 