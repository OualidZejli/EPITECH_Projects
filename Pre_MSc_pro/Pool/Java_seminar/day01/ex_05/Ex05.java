package ex_05;

import java.util.ArrayList;

public class Ex05 {

    public static void main(String[] args) {

    }

    public static ArrayList<String> myGetArgs(String... var){
        
        ArrayList<String> myArray = new ArrayList<>();

        for(int i = 0; i<var.length; i++){
            myArray.add(var[i]);
        }

        return myArray;
    }
    
}
