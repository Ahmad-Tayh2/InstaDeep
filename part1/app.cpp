#include<bits/stdc++.h>
using namespace std;

string processString(string s){
	string stringPrepared="";
	
	// remove any letter not a..z or A..Z
	for(int i=0; i<s.size(); i++){
		if(s[i]>='a' && s[i]<='z')
			stringPrepared += s[i];
		if(s[i]>='A' && s[i]<='Z'){
			// if letter is upper transform to lower
			stringPrepared += char(s[i] - int('A'-'a'));
		}
	}
	
	return stringPrepared;
}

bool isPilandrom(string stringBeforeProcessing){
    string stringAfterProcessing = processString(stringBeforeProcessing);
    int i=0;
    int j=stringAfterProcessing.size()-1;
    while(i<=j){
        if(stringAfterProcessing[i] != stringAfterProcessing[j]){
          return false;
        }
        i++;
        j--;
    }
    return true;
}

int main() {
	string s;
	getline(cin, s);
	if(isPilandrom(s)){
		cout << "Yes";
	} else cout << "No";
	
	
}