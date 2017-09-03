package com.example.liubo.weatherpullparse;

import android.content.res.AssetManager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Xml;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import org.xmlpull.v1.XmlPullParser;
import org.xmlpull.v1.XmlPullParserException;

import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;

public class MainActivity extends AppCompatActivity {

    private TextView editText;
    private Button button1;
    private String result;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // 获取文本信息
        editText = (TextView) findViewById(R.id.edit);
        button1 = (Button) findViewById(R.id.button);
        result = "";
        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                try {

                    // 找到assets
                    AssetManager assetManager = getAssets();
                    InputStream inputStream = assetManager.open("weather.xml");
                    XmlPullParser xmlPullParser = Xml.newPullParser();
                    xmlPullParser.setInput(inputStream, "utf-8");
                    int evenType = xmlPullParser.getEventType();
                    while (evenType != xmlPullParser.END_DOCUMENT) {

                        if (evenType == xmlPullParser.START_TAG) {

                            if (xmlPullParser.getName().equals("string")) {
                                result += xmlPullParser.nextText() + "\n";
                            }
                        }
                        evenType = xmlPullParser.next();
                    }
                    editText.setText(result);

                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });

    }
}
