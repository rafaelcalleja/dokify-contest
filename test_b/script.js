var json_object = { prop: 'value', another: true, foo: 'bar' };
var actual = Object.keys(json_object).length;

console.assert(3 == actual, {"message":"no tiene el tamaño correcto ","a":actual});


var geo_json = [{
        "point": "40.266044,-74.718479",
        "homeTeam":"Lawrence Library",
        "awayTeam":"LUGip",
        "markerImage":"images/red.png",
        "information": "Linux users group meets second Wednesday of each month.",
        "fixture":"Wednesday 7pm",
        "capacity":"",
        "previousScore":""
    },
    {
        "point":"0.211600,-74.695702",
    "homeTeam":"Hamilton Library",
    "awayTeam":"LUGip HW SIG",
    "markerImage":"images/white.png",
    "information": "Linux users can meet the first Tuesday of the month to work out harward and configuration issues.",
    "fixture":"Tuesday 7pm",
    "capacity":"",
    "tv":""
},
{
    "point":"40.294535,-74.682012",
    "homeTeam":"Applebees",
    "awayTeam":"After LUPip Mtg Spot",
    "markerImage":"images/newcastle.png",
    "information": "Some of us go there after the main LUGip meeting, drink brews, and talk.",
    "fixture":"Wednesday whenever",
    "capacity":"2 to 4 pints",
    "tv":""
}];


actual = Object.keys(geo_json).length;

console.assert(3 == actual, {"message":"no tiene el tamaño correcto ","a":actual});

var colors_json =
[
    {
        color: "red",
        value: "#f00"
    },
    {
        color: "green",
        value: "#0f0"
    },
    {
        color: "blue",
        value: "#00f"
    },
    {
        color: "cyan",
        value: "#0ff"
    },
    {
        color: "magenta",
        value: "#f0f"
    },
    {
        color: "yellow",
        value: "#ff0"
    },
    {
        color: "black",
        value: "#000"
    }
];

actual = Object.keys(colors_json).length;

console.assert(7 == actual, {"message":"no tiene el tamaño correcto ","a":actual});