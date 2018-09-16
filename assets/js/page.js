var jQueryScript = document.createElement('script');  
jQueryScript.setAttribute('src','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
document.head.appendChild(jQueryScript);

var Paginationjs = document.createElement('script');
Paginationjs.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.3/pagination.js');
document.head.appendChild(Paginationjs);

$('#pages').pagination({
    dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 195],
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
})