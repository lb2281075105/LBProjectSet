//
//  ViewController.m
//  LBMoneyCount
//
//  Created by yunmei on 2017/9/27.
//  Copyright © 2017年 刘博. All rights reserved.
//

#import "ViewController.h"
#import "Masonry.h"
@interface ViewController ()<UITextFieldDelegate>
@property (nonatomic, strong) UITextField *textField;
@property (nonatomic, strong) UITextField *textField1;
@property (nonatomic, strong) UITextField *textField2;
@property (nonatomic, strong) UILabel *label;
@property (nonatomic, strong) UILabel *label1;
@property (nonatomic, strong) UILabel *label2;
@end

@implementation ViewController
/// UITextfield 金额格式限制，UITextfield正整数格式限制
- (void)viewDidLoad {
    [super viewDidLoad];
    
    /// 第一种金额格式限制
    [self firstMoneyMethod];
    /// 第二种金额格式限制
    [self secondMoneyMethod];
    /// 数量正整数输出
    [self countMethod];
}
/// 第一种金额格式限制
- (void)firstMoneyMethod{

    _label = [[UILabel alloc]init];
    [self.view addSubview:_label];
    _label.text = @"第一种";
    [_label mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@40);
        make.top.equalTo(@100);
        make.height.equalTo(@40);
    }];

    _textField = [[UITextField alloc]init];
    _textField.keyboardType = UIKeyboardTypeDecimalPad;
    [self.view addSubview:_textField];
    _textField.layer.borderColor = [UIColor grayColor].CGColor;
    _textField.layer.borderWidth = 1;
    [_textField mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(_label.mas_right).offset(10);
        make.width.equalTo(@200);
        make.centerY.equalTo(_label);
        make.height.equalTo(@40);
    }];
    [_textField setPlaceholder:@" 请输入金额"];
    [_textField setDelegate:self];
}
/// 第二种金额格式限制
- (void)secondMoneyMethod{

    _label1 = [[UILabel alloc]init];
    [self.view addSubview:_label1];
    _label1.text = @"第二种";
    [_label1 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@40);
        make.top.equalTo(_label).offset(60);
        make.height.equalTo(@40);
    }];
    
    _textField1 = [[UITextField alloc]init];
    _textField1.keyboardType = UIKeyboardTypeDecimalPad;
    [self.view addSubview:_textField1];
    _textField1.layer.borderColor = [UIColor grayColor].CGColor;
    _textField1.layer.borderWidth = 1;
    [_textField1 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(_label.mas_right).offset(10);
        make.width.equalTo(@200);
        make.centerY.equalTo(_label1);
        make.height.equalTo(@40);
    }];
    [_textField1 setPlaceholder:@" 请输入金额"];
    [_textField1 setDelegate:self];
    
}
/// 正整数输出
- (void)countMethod{

    _label2 = [[UILabel alloc]init];
    [self.view addSubview:_label2];
    _label2.text = @"第三种";
    [_label2 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(@40);
        make.top.equalTo(_label1).offset(60);
        make.height.equalTo(@40);
    }];
    
    _textField2 = [[UITextField alloc]init];
    _textField2.keyboardType = UIKeyboardTypeNumberPad;
    [self.view addSubview:_textField2];
    _textField2.layer.borderColor = [UIColor grayColor].CGColor;
    _textField2.layer.borderWidth = 1;
    [_textField2 mas_makeConstraints:^(MASConstraintMaker *make) {
        make.left.equalTo(_label.mas_right).offset(10);
        make.width.equalTo(@200);
        make.centerY.equalTo(_label2);
        make.height.equalTo(@40);
    }];
    [_textField2 setPlaceholder:@" 请输入数量"];
    [_textField2 setDelegate:self];
    
}
- (BOOL)textField:(UITextField *)textField shouldChangeCharactersInRange:(NSRange)range replacementString:(NSString *)string
{   /// 小数点前面限制输出位数
    if (_textField == textField) {
        /// 删除键
        if ([string isEqualToString:@""]) {
            return YES;
        }
        
        if (string.length != 1) {
            return NO;
        }
        
        if (![@"0123456789." rangeOfString:string].length) {
            return NO;
        }
        
        if (textField.text.length == 0) {
            return ![string isEqualToString:@"."];
        } else if (textField.text.length == 1){
            /// 第一位为0，只能输入.
            if ([textField.text isEqualToString:@"0"]) {
                return [string isEqualToString:@"."];
            }
        } else {
            if ([textField.text rangeOfString:@"."].length) {
                /// 只能输入一个.
                if ([string isEqualToString:@"."]) {
                    return NO;
                }
                /// 小数点后2位
                NSArray *ary =  [textField.text componentsSeparatedByString:@"."];
                if (ary.count == 2) {
                    if ([ary[1] length] == 2) {
                        return NO;
                    }
                }
            } else {
                /// 小数点前6位
                if ([textField.text length] == 6) {
                    if (![string isEqualToString:@"."]) {
                        return NO;
                    }
                }
            }
        }
    }else if(_textField1 == textField){
        /// 小数点前面不限制输出位数
        /// 删除处理
        if ([string isEqualToString:@""]) {
            return YES;
        }
        /// 首位不能为.号
        if (range.location == 0 && [string isEqualToString:@"."]) {
            return NO;
        }
    
        /// 判断只输出数字和.号
        if (![@"0123456789." rangeOfString:string].length) {
            return NO;
        }
    
        /// 逻辑处理
        if ([textField.text containsString:@"."]) {
            if ([string isEqualToString:@"."]) {
                return NO;
            }
            NSRange subRange = [textField.text rangeOfString:@"."];
            if (range.location - subRange.location > 2) {
                return NO;
            }
            
        }
    }else{
        /// 输出正整数
        if ([string isEqualToString:@""]) {
            return YES;
        }

        if (string.length != 1) {
            return NO;
        }

        if (![@"0123456789" rangeOfString:string].length) {
            return NO;
        }
        /// 输入第一个为0,则不再输出
        if (textField.text.length == 1) {
            if ([textField.text isEqualToString:@"0"]) {
                return NO;
            }
        }
        /// 限制输出正整数位数
        if (textField.text.length == 6) {
            return NO;
        }

    }
    
    return YES;
}





@end
