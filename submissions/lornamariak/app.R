

library(shiny)



ui <- fluidPage(
   
  # Application title
  titlePanel("TEMPERATURE CONVERTER"),
      
  
      mainPanel(
        
        numericInput("temp", "TEMPERATURE",min = 0, NA, NA,
                     width = NULL),
        radioButtons("units", "UNITS",
                     c("CELSIUS" = "cel",
                       "FARHNEHEIT" = "Farh",
                       "KELVIN" = "Kel")),
        HTML("<p '>Convert to</p>"),
       
        radioButtons("units1", "UNITS",
                     c("CELSIUS" = "cel1",
                       "FARHNEHEIT" = "Farh1",
                       "KELVIN" = "Kel1")),
        actionButton("convert", "CONVERT"),
        textOutput("ans")
      )
)
   


server <- function(input, output) {
 
  
  observeEvent(input$convert, {
    fun <- reactive(
      x <-(input$units), 
      y <- (input$units1),
      z <- (input$temp),
      w <- (output$ans)
     
     
    ) 
    
    if (x == cel && y == farh1 ){
      
      cel.farh <- function( z)
      {
        
      
  w = ((z *1.8)+32) 
     return(w)   
    
    }
   
    } else if (x == farh && y == cel1)
      {
      farh.cel <- function(z)
      {
        w = (z - 32)*5.556
        return(w)
        
      }
    }else if(x == cel && y == kel1){
      cel.kel<- function(z){
        w = z + 273.15
        return(w)
      }
    } else if(x == kel && y == cel1){
      kel.cel <- function(z){
        w = z - 273.15
        return(w)
      }
    }else if (x == kel && y == farh1){
      kel.farh<- function(z){
        w = ((z - 273.15)*1.8 )+32
        return(w)
      }
      
    }
    
    
  })
   
  output$ans <- reactive(w)
  outputOptions(output, "ans", suspendWhenHidden = FALSE)
  
}
# Run the application 
shinyApp(ui = ui, server = server)

