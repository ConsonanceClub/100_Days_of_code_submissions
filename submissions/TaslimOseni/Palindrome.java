public class Palindrome {

	
	public static boolean isPalindrome(String word){
		int backStrokeIndex = word.length() - 1;
		char[] scatter = word.toCharArray();
		for(int i = 0; i < scatter.length; i++){
			if(scatter[i] != scatter[backStrokeIndex]){
				return false;
			}
			backStrokeIndex--;
		}
		return true;
	}
	
	
	//Example:
	public static void main(String[] args) {
		System.out.println(isPalindrome("hahahahahahahahah"));	//Had to put the last 'h'.. Lol
	}

}

