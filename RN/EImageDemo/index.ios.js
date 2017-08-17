/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 * @flow
 */

import React, { Component } from 'react';
import {
  AppRegistry,
  StyleSheet,
  Text,
  View,
  Image
} from 'react-native';

class EImageDemo extends Component {
  render() {
    return (
      <View style={styles.container}>

        {/*从项目中加载图片*/}
        <Text>1.从项目中加载图片</Text>
        <Image source={require('./img/icon.png')} style={styles.imageStyle} />

        {/*从资源包中加载图片*/}
        <Text>2.从APP中加载图片</Text>
        <Image source={require('image!bd_logo1')} style={styles.imageStyle} />

        {/*从网络中加载图片*/}
         <Text>3.从网络中加载图片</Text>
         <Image source={{uri: 'http://www.520it.com/userfiles/1/images/cms/site/2015/09/index_06.jpg'}}  style={styles.imageStyle} />

        {/*从资源包中加载图片--另一种方式*/}
        <Text>4.从APP中加载图片</Text>
        <Image source={{uri: 'bd_logo1'}} style={styles.imageStyle} />


      </View>
    );
  }
}



class EImageDemo1 extends Component {
    render() {
        return (
            <View style={styles.container}>
                {/*用图片设置背景*/}
                <Text>5.用图片设置背景</Text>
                <Image source={{uri: 'https://www.baidu.com/img/bd_logo1.png'}}  style={styles.imageStyle} >
                    <Text style={{marginTop:40, backgroundColor:'transparent'}}>我是文字</Text>
                </Image>
            </View>
        );
    }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },
  imageStyle:{
      width:160,
      height:160,
      // 圆角
      // borderRadius:30

      // 设置图片的内容模式
      resizeMode:'cover'
      // resizeMode:'contain'
      // resizeMode:'stretch'
  }

});

AppRegistry.registerComponent('EImageDemo', () => EImageDemo1);
