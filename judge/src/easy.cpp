#include <iostream>
using namespace std;

int main() {
  int t , n  , s ;

  while( cin >> t , t > 0 ) {
      s = 0;
      while( t-- ) {
          cin >> n ;
          if( n >= 1000 )
            s++;
      }
      cout << s << endl;
  }

  return 0;
}