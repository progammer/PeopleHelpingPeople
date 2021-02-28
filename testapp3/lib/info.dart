import 'dart:ui';

import 'package:flutter/material.dart';

class InfoApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(title: Text("About Us")),
        body: Column(
          children: [
          Padding(padding: EdgeInsets.all(30.0)),
          Center(
          child: Container(
          width: 300,
          child:
          Text("With the arrival of the winter storm, countless houses were affected, with busted water pipes, or even flooded houses. Many of these people were our relatives or close friends. We realized not only the importance of having water, but we realized how many people could really use a helping hand. Its difficult to just sit there and know that people are out there struggling just like our loved ones did. We created the app for that very purpose: for people affected by the disaster to be able to find help, and for volunteers to be able to find the people that need help. Our mission is to give hope to those that are suffering by connecting them with others who can help."),
          )
          ),
          Padding(padding: EdgeInsets.all(30.0)),
          Container(
          child: Image.network("https://images.pexels.com/photos/461049/pexels-photo-461049.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500")
          )
          ]
          ),
    )
    );
  }
}
