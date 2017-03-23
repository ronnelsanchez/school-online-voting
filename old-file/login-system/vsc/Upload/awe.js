var image=['image-1.jpg', 'image-2.jpg', 'image-3.jpg', 'image-4.jpg', 'image-5.jpg', 'image-6.jpg']

var num=0;

function next()
{
	var slide=document.getElementById('slider')
	num++;
    if(num>=image.length)
	    num=0;
	slide.src=image[num];
	
	
	
}

function prev()
{
	var slide=document.getElementById('slider');
	num--;
	if(num<0)
		num=image.length-1;
	slide,src=image[num];
	
}