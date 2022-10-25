public class Ex02 {
    
    public static void main(String[] args) {
        Ex02.getAngryDog(3);
    }

    public static String getAngryDog(int nbr){

        String woof = "";

        for (int i=0; i<nbr; i++){
            woof = woof + "woof";
        }

        return woof;
    }
}
