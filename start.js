// import environmental variables from our variables.env file
require('dotenv').config({ path: 'variables.env' });

// Start our app!
const app = require('./app');
app.set('port', process.env.PORT || 80);
const server = app.listen(app.get('port'), '0.0.0.0', () => {
  console.log(`Express running → PORT ${server.address().port}`);
});
