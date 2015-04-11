var express = require('express');
var router = express.Router();

router.get('/', function(req, res) {
  res.json({ message: "Oh hai" });
});

router.get('/webapp', function(req, res) {
  fs.readFile('./index.html', function (err, html) {
    if (err) {
        throw err; 
    }       
    http.createServer(function(request, response) {  
        response.writeHeader(200, {"Content-Type": "text/html"});  
        response.write(html);  
        response.end();  
    }).listen(8000);
});



module.exports = router;

