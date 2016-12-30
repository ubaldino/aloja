
import java.util.Scanner;
class easy {
  public static void main( String[] args ) {
    Scanner sc = new Scanner( System.in );
    int t , n  , s ;
    while( true ){
      t = sc.nextInt();
      if ( t == 0 ) {
        break;
      }
      s = 0;
      while( t-- > 0 ){
        n = sc.nextInt();
        if( n >= 1000 )
          s++;
      }
      System.out.println( s );
    }
  }
}

