package com.example.charmi.prescriptionviewer;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

public class login extends AppCompatActivity {

    private EditText Id;
    private Button Submit;
    boolean found = false;
    SharedPreferences spref;
    String id = "";
    private DatabaseReference database;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        Id = (EditText) findViewById(R.id.Id);
        Submit = (Button) findViewById(R.id.button);
        database = FirebaseDatabase.getInstance().getReference().child("patients");

        }


    public void validate(View view) {
        final String id2= Id.getText().toString().trim();
        spref = getSharedPreferences("Id", Context.MODE_PRIVATE);
        SharedPreferences.Editor editor=spref.edit();
        editor.putString("Pat_id",id2);
        editor.commit();
        //DatabaseReference myRef = database.getReference().child("patients");
        id = id2;
       /* if (spref == null) {*/

            database.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(DataSnapshot dataSnapshot) {
                    if (dataSnapshot.hasChild(id2)) {

                       // Log.d(TAG,"value is:"+id2)
                        Intent i = new Intent(login.this, MainActivity.class);
                        startActivity(i);

                        }
                    else{
                        Toast.makeText(getBaseContext(), "Enter Correct Id!!!", Toast.LENGTH_LONG).show();
                    }
                    }


                @Override
                public void onCancelled(DatabaseError databaseError) {

                }

            });

    }
}