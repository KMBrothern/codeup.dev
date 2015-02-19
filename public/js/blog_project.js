var blog = [
    {
        "title": "This is a title for this",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "image": "http://www.someimagehere.com/image.jpg",
        "tags": [
            "web",
            "design",
            "html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    },
    {
        "title": "This is a title for this",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "tags": [
            "web",
            "design",
            "html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    }
]



var blogContent = document.getElementById('blogContent');
var postInfoString = '';
    for(i = 0; i < blog.length; i++) {
        postInfoString += blog[i].title;
        postInfoString += blog[i].author;
        postInfoString += blog[i].date;
        postInfoString += blog[i].category;
        postInfoString += blog[i].post;

        console.log(postInfoString);
    }
blogContent.innerHTML = postInfoString;






// title
// date - author - category
// tags: web, design, html
// image - post

// title
// date - author - category
// tags: web, design, html
// post
// image - post



// The purpose of this exercise is Automation--at present. 
// Look @ the above reference, the blog [] as a tree.
// the blog [] is the first level, the {} objects are the second level. And the properties(the things inside of the objects) are the third level
// You want all of the properties to print in one long string (1st)
// This is my junk yard of crap....do not touch!! 
// var author = "Keyasha B. "

 var runLvlHeader = document.getElementById('runlvl6-header')
 runLvlHeader.innerHTML = "Back To RL 6";

 var blogHeader = document.getElementById('blogHeader');
 blogHeader.innerHTML = "RL 6";

 var titleSubHeading = document.getElementById('titleSubHeading');
 titleSubHeading.innerHTML = "These Are My Ramblings, Welcome To The Sideshow";

 blogHeader.style.color = "#81d8d0";
// // var firstPostTitle = document.getElementById('firstPostTitle');
// // not sure what I want to do with above just yet, so I'm leaving it alone
// // var author = document.getElementById('author');
// // author.innerHTML = "Keyasha B. "

// var title = document.getElementById('firstPostTitle');
// title.innerHTML= "This is my first Blog Post";
// var blogContent = document.getElementById('blogContent');
// blogContent.innerHTML = "This is just whatever the heck I want to say. Currently, I'm mostly breaking stuff, but apparently that's how I roll."

// **This is the blog content/structure from the clean blog bootstrap theme
// <div class="post-preview">
//                     <!-- <a href="post.html"> -->
//                         <h2 class="post-title">
//                             I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
//                         </h2>
//                     <!-- this is the closing to the post preview link</a> -->
//                     <p class="post-meta">Posted by <a  href="http://codeup.dev/runlvl6.html">Start Bootstrap</a> on September 18, 2014</p>
//                 </div>
//                 <hr>
//                 <div class="post-preview">
//                     <!-- <a href="post.html"> -->
//                         <h2 class="post-title">
//                             Failure is not an option
//                         </h2>
//                         <h3 class="post-subtitle">
//                             Many say exploration is part of our destiny, but it’s actually our duty to future generations.
//                         </h3>
//                     </a>
//                     <p class="post-meta">Posted by <a  href="http://codeup.dev/runlvl6.html">Start Bootstrap</a> on July 8, 2014</p>
//                 </div>





