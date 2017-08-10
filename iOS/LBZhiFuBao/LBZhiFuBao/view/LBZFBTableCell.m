//
//  LBZFBTableCell.m
//  LBZhiFuBao
//
//  Created by 刘博 on 2017/8/11.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBZFBTableCell.h"

@implementation LBZFBTableCell

+ (instancetype)cellWithTableView:(UITableView *)tableView{

    LBZFBTableCell *cell = [tableView dequeueReusableCellWithIdentifier:@"LBZFBTableCell"];
    if (!cell) {
        cell = [[LBZFBTableCell alloc]initWithStyle:UITableViewCellStyleDefault reuseIdentifier:@"LBZFBTableCell"];
    }
    
    return cell;
}
- (instancetype)initWithStyle:(UITableViewCellStyle)style reuseIdentifier:(NSString *)reuseIdentifier{
    self = [super initWithStyle:style reuseIdentifier:reuseIdentifier];
    if (self) {
        
    }
    return self;
}

- (instancetype)init
{
    self = [super init];
    if (self) {
        
    }
    return self;
}
/// 重新布局控件
- (void)layoutSubviews{
    [super layoutSubviews];
}
@end
