var store = {};
(function(get, otherCallback ) {
    var n=0;

    get("data", {num:10}, function(res){
        n=n*res;
    });

    setTimeout(function(){
        n=n*2;
        otherCallback(n);
    }, 0);

    n=n+2;

}(function (variable, object, callback){
    store[variable] = object.num;
    return callback(object.num);
}, function(value){
    console.log('n = ' + value);
}));
