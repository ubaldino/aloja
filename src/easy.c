#include <stdio.h>


int main() {
  int t , n  , s ;

  while( scanf( "%d" , &t ) , t > 0 ) {
      s = 0;
      while( t-- ) {
          scanf( "%d" , &n );
          if( n >= 1000 )
            s++;
      }
      printf("%d\n" , s );
  }

  return 0;
}