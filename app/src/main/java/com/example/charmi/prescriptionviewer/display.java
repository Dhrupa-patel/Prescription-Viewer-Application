package com.example.charmi.prescriptionviewer;

/**
 * Created by Dell-PC on 17-04-2018.
 */

public class display {
    public String Morning;
    public String Afternoon;
    public String Night;
    public String Days;
    public String Dosage;

    public display() {
    }

    public display(String morning, String afternoon, String night, String days, String dosage) {
        Morning = morning;
        Afternoon = afternoon;
        Night = night;
        Days = days;
        Dosage = dosage;
    }

    public String getMorning() {
        return Morning;
    }

    public void setMorning(String morning) {
        Morning = morning;
    }

    public String getAfternoon() {
        return Afternoon;
    }

    public void setAfternoon(String afternoon) {
        Afternoon = afternoon;
    }

    public String getNight() {
        return Night;
    }

    public void setNight(String night) {
        Night = night;
    }

    public String getDays() {
        return Days;
    }

    public void setDays(String days) {
        Days = days;
    }

    public String getDosage() {
        return Dosage;
    }

    public void setDosage(String dosage) {
        Dosage = dosage;
    }
}
