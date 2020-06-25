const moment = require('moment');
const sayDate = () => moment().format('DD/MM/YYYY HH:mm:ss');
module.exports = { sayDate };
