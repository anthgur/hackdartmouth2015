var express = require('express');
var router = express.Router();
 
router.get('/', function(req, res) {
	console.dir(req.param);

    if (req.method == 'POST') {
        /*var body = '';
        req.on('data', function (data) {
            body += data;
            console.log("Partial body: " + body);
        });
        req.on('end', function () {
            console.log("Body: " + body);
        });
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.end('post received');*/
		res.json({ message: "POST" });
    }
    else
    {
        res.json({ message: "GET" });
    }
});

module.exports = router;

