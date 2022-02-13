getMovieList(prompt())
function getMovieList(year){
var arr = [];
fetch('https://jsonmock.hackerrank.com/api/moviesdata?Year='+year).then(response => response.json()).then(data => 
	
	data.data.forEach(value => {
        arr.push(value.Title)
    })    
);

setTimeout(function(){
	if(arr.length > 0){
  	    arr.forEach(value => {
            console.log(value)
        })
    }else{
        console.log('No Result Found')
    }	
    }, 1000)
}