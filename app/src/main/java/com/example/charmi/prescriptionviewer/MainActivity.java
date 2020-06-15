package com.example.charmi.prescriptionviewer;

import android.content.Context;
import android.content.SharedPreferences;
import android.speech.tts.TextToSpeech;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    ArrayList<String>meds;
    ArrayAdapter<String> adapter;
    private ListView list;
    private String patient_id;
    SharedPreferences sharedref;
    private DatabaseReference database;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        list=(ListView) findViewById(R.id.medicine);
        meds= new ArrayList<>();
        adapter= new ArrayAdapter<String>(this,android.R.layout.simple_list_item_1,meds );
        sharedref = getSharedPreferences("Id", Context.MODE_PRIVATE);
       database = FirebaseDatabase.getInstance().getReference().child("patients");
        patient_id= sharedref.getString("Pat_id", "NA");

        Toast.makeText(getBaseContext(), patient_id, Toast.LENGTH_LONG).show();
        //database.child("patients").child(patient_id).child("Attributes").setValue("Name of Prescription");

        //final String PatientId="Patient1";

        database.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {

                for (DataSnapshot ds : dataSnapshot.child(patient_id).getChildren()) {
                    String s = ds.getValue().toString();
                    meds.add(s);
                }
                //ListAdapter listAdapter=new ArrayAdapter<>(getBaseContext(),android.R.layout.simple_list_item_1,meds);
                list.setAdapter(adapter);
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });
    }
}

