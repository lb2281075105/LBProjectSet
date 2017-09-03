package com.example.liubo.xmlstorage;


import android.content.Context;

import org.xmlpull.v1.XmlSerializer;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

/**
 * Created by liubo on 2017/9/3.
 */

public class Xml {
//    public static void xmlStorage(Context context, String uasername, String pwd) throws ex{
//
//    }

    public static void xmlStorage(Context context, String uasername, String pwd) {
        StringBuffer stringBuffer = new StringBuffer();
        stringBuffer.append("<map>");
        stringBuffer.append("<string name=\"uasername\">" + uasername + "</string>");
        stringBuffer.append("<string name=\"pwd\">" + pwd + "</string>");
        stringBuffer.append("</map>");
        String string = stringBuffer.toString();
        // 创建文件目录，保存xml文件
        try {
            File file = new File(context.getFilesDir(), "info.xml");
            // 字符流
            BufferedWriter bufferedWriter = new BufferedWriter(new FileWriter(file));
            bufferedWriter.write(string);
            bufferedWriter.close();
        } catch (IOException e) {
            e.printStackTrace();
        }

    }
}
