#include <iostream>
using namespace std;
class Sum
{
    private: int x, y, z;
    
    public:
    void count()
    {
        cout<<"Enter X & Y: ";
        cin>>x>>y;
        
        z= x+y;
        cout<<"value of z is:"<<z<<endl; 
    }
};
int main()
{
   Sum sm;
   sm.count();
   sm.x=6;


    return 0;
}