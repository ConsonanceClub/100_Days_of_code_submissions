public class Factorial {

	
	//Factorial method
	int factorialMethod(int number){
		if((number == 1) || (number == 1)){
			return 1;
		}
		return number * factorialMethod(number - 1);
	}
	

	
	//Loop method
	int loopMethod(int number){
		if((number == 1) || (number == 1)){
			return 1;
		}
		int factorial = 1;
		for(int i = 1; i <= number; i++){
			factorial *= i;
		}
		return factorial;
	}

}

