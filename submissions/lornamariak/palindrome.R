x <- readline(prompt = "enter word or numbers: ")
is.palindrome <- function (x) 
  {
  identical(x, paste(rev(strsplit(x, "")[[1]]), collapse=""))
}
print(is.palindrome(x))