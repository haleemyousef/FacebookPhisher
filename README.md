# FacebookPhisher
Hard-to-detect facebook clone webpage that stores victim credentials in either a file or a database. I recommend the first option for the time being due to security-related concerns as it is still in the testing phase.

## Installation:
`config.php` is to be edited to suit your needs before you upload the program to the server of your choice.

## Features:

- One-time access using a session that redirects the victim to the genuine Facebook login page after credentials are obtained to minimize suspicion.
- Cannot be re-accessed using the `Go back` button on the browser.
- Double-line protection against submitting empty strings using both Javascript and PHP.
- If the `fopen` option was chosen in configuration, the obtained username|password combinations can be securely accessed through any browser.
- Proof against malicious scripts being submitted as credentials.

## Contributing:
All contributions are welcomed and appreciated.

## TODO:

- More informations is to be logged about victims, such as IP address, MAC address, and operating system.
- To be tested against tools like VEGA and SQLMAP.
- `mysqli_real_escape_string` to be replaced with a more secure PDO driver.
- Add more mediums of storing data, such as CSV files and SQLite databases.

## Support:

- Author : Haleem Yousef 
- E-mail  &nbsp;: haleemyousef01@gmail.com 
- GitHub : https://github.com/haleemyousef 

## Disclaimer:

The use of the software is done at your own discretion and risk and with agreement that you will be solely responsible for any damage to your computer system or loss of data that results from such activities. You are solely responsible for adequate protection and backup of the data and equipment used in connection with any of the software, and we will not be liable for any damages that you may suffer in connection with using, modifying or distributing any of this software. No advice or information, whether oral or written, obtained by you from us or from this website shall create any warranty for the software.
