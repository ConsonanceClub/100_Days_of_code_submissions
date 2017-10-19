// Tweaked quote generator used for a previous project
// Jennifer Nordell


// Set the interval to pull up a new quote
var intervalID = window.setInterval(printQuote, 7500);

var quotes = [ 
    { 
        quote: "Frankly, my dear, I don't give a damn.",
        source: "Rhett Butler",
        citation: "Gone With the Wind",
        year: 1939,
        tags: ["movies"]
    },
    {
        quote: "Do not take life too seriously. You will never get out of it alive.",
        source: "Elbert Hubbard",
        tags: ["humor"]
    },
    {
        quote: "To succeed in life, you need three things: a wishbone, a backbone and a funny bone.",
        source: "Reba McEntire",
        tags: ["motivation", "humor"]
    },
    {
        quote: "Others have seen what is and asked why. I have seen what could be and asked why not.",
        source: "Pablo Picasso",
        citation: "Pablo Picasso: Metamorphoses of the Human Form: Graphic Works",
        tags: ["creativity"]
    },
    {
        quote: "Imagination is everything. It is the preview of life's coming attractions.",
        source: "Albert Einstein",
        tags: ["creativity"]
    },
    {
        quote: "I never made one of my discoveries through the process of rational thinking.",
        source: "Albert Einstein",
        tags: ["creativity"]
    },
    {
        quote: "The worst enemy to creativity is self-doubt.",
        source: "Sylvia Plath",
        citation: "The Unabridged Journals of Sylvia Plath",
        tags: ["creativity", "motivation"]
    },
    {
        quote: "Only I can change my life. No one can do it for me.",
        source: "Carol Burnett",
        tags: ["motivation"]
    },
    {
        quote: "Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence",
        source: "Hellen Keller",
        tags: ["success", "motivation"]
    },
    {
        quote: "It does not matter how slowly you go as long as you do not stop.",
        source: "Confuscius",
        tags: ["motivation"]
    },
    {
        quote: "If you can dream it, you can do it.",
        source: "Walt Disney",
        tags: ["creativity", "motivation"]
    },
    {
        quote: "Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.",
        source: "Thomas A. Edison",
        tags: ["success", "motivation"]
    },
    {
        quote: "When you realize you want to spend the rest of your life with somebody, you want the rest of your life to start as soon as possible.",
        source: "When Harry Met Sally",
        year: 1989,
        tags: ["love", "movies"]
    },
    {
        quote: "I'm also just a girl, standing in front of a boy, asking him to love her.",
        source: "Notting Hill",
        year: 1999,
        tags: ["love", "movies"]
    },
    {
        quote: "The greatest happiness of life is the conviction that we are loved; loved for ourselves, or rather, loved in spite of ourselves",
        source: "Victor Hugo",
        tags: ["love"]
    }, 
    {
        quote: "Classes will dull your mind, destroy the potential for authentic creativity.",
        source: "John Nash",
        tags: ["creativity"]
    },
    {
        quote: "I've made the most important discovery of my life. It's only in the mysterious equation of love that any logical reasons can be found. I'm only here tonight because of you. You're the only reason I am...you're all my reasons.~",
        source: "John Nash",
        tags: ["logic", "love"]
    }
];

// a place to hold the quotes that have been shown thus far
let usedQuotes = []

function getRandomQuote() {
    if(quotes.length === 0) {
        // Quotes is empty, we need to reset the arrays
        quotes = usedQuotes;
        usedQuotes = [];
        return getRandomQuote(); // It's necessary to recurse and go again now it's in the proper state
    } else {
        const selection = quotes.splice(Math.floor(Math.random() * quotes.length), 1)[0]; // This simultaneously gets the object at a random index and removes it from the quotes array
        usedQuotes.push(selection);
        return selection;
    }
}

// Build up the HTML to print to the appropriate place
function printQuote() {
    let html = "";  // Initialized to an empty string to avoid problems with undefined when concatenating
    let selectedQuote = getRandomQuote();
    let newQuoteButton = document.getElementById

    // No matter what, add these two paragraphs
    html += `<p class="quote">${selectedQuote["quote"]}</p>`;
    html += `<p class="source">${selectedQuote["source"]}`;

    // If the quote has any or all of these properties, add them to the HTML
    if(selectedQuote.hasOwnProperty("citation")) {
        html += `<span class="citation">${selectedQuote["citation"]}</span>`;
    }
    if(selectedQuote.hasOwnProperty("year")) {
        html += `<span class="year">${selectedQuote["year"]}</span>`;
    }
    html += "</p>";
    if(selectedQuote.hasOwnProperty("tags")) {
        html += `<p>`;
        for(var i = 0; i < selectedQuote["tags"].length; i++) {
            html += `<span>#${selectedQuote["tags"][i]}  </span>`;
        }
        html += `</p>`;
    }

    // Write the HTML the DOM by setting the ìnnerHTML property
    document.getElementById('quote-box').innerHTML = html;

    // Change the bakcground color to a random color
    let randomColor = getRandomColor();
    let quoteButton = document.getElementById("loadQuote");
    document.body.style.backgroundColor = randomColor;
    quoteButton.style.backgroundColor = randomColor;
}

function getRandomColor() {
    // Generate random rgb color for changing background color
    // Upper range limited so as to ensure that the white text still shows up

    let color = `rgb(${Math.floor(Math.random()*215)}, ${Math.floor(Math.random()*215)}, ${Math.floor(Math.random()*215)}`;
    return color;    
}

// event listener to respond to "Show another quote" button clicks
// when user clicks anywhere on the button, the "printQuote" function is called
document.getElementById('loadQuote').addEventListener("click", printQuote, false);

